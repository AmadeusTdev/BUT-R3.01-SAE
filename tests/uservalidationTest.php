<?php

use PHPUnit\Framework\TestCase;

class UserValidationTest extends TestCase
{
    private function isValidEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    private function isValidPassword(string $password): bool
    {
        return strlen($password) >= 8;
    }

    private function isValidLogin(string $login): bool
    {
        return trim($login) !== '' && strlen(trim($login)) >= 3;
    }

    public function testValidEmailIsAccepted(): void
    {
        $this->assertTrue($this->isValidEmail('user@example.com'));
    }

    public function testInvalidEmailIsRejected(): void
    {
        $this->assertFalse($this->isValidEmail('email-invalide'));
    }

    public function testShortPasswordIsRejected(): void
    {
        $this->assertFalse($this->isValidPassword('123'));
    }

    public function testValidPasswordIsAccepted(): void
    {
        $this->assertTrue($this->isValidPassword('motdepasse123'));
    }

    public function testEmptyLoginIsRejected(): void
    {
        $this->assertFalse($this->isValidLogin('   '));
    }

    public function testShortLoginIsRejected(): void
    {
        $this->assertFalse($this->isValidLogin('ab'));
    }

    public function testValidLoginIsAccepted(): void
    {
        $this->assertTrue($this->isValidLogin('jules'));
    }
}