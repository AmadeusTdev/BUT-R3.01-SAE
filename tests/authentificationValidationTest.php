<?php

use PHPUnit\Framework\TestCase;

class authentificationValidationTest extends TestCase
{
    private function isValidCredentials(string $email, string $password): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false
            && strlen(trim($password)) >= 8;
    }

    public function testValidCredentialsAreAccepted(): void
    {
        $this->assertTrue($this->isValidCredentials('user@example.com', 'motdepasse123'));
    }

    public function testInvalidEmailIsRejected(): void
    {
        $this->assertFalse($this->isValidCredentials('invalid-email', 'motdepasse123'));
    }

    public function testShortPasswordIsRejected(): void
    {
        $this->assertFalse($this->isValidCredentials('user@example.com', 'short'));
    }

    public function testEmptyPasswordIsRejected(): void
    {
        $this->assertFalse($this->isValidCredentials('user@example.com', ''));
    }
}