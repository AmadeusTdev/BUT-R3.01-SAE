--
-- PostgreSQL database dump
--

\restrict XYNqHoc7clxbWrGk7XNP2kPQMud0ySTRvRDCAWONM8f6urTSNkbWtgvpeCso16n

-- Dumped from database version 17.11
-- Dumped by pg_dump version 18.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: public; Type: SCHEMA; Schema: -; Owner: mathiasm
--

-- *not* creating schema, since initdb creates it


ALTER SCHEMA public OWNER TO mathiasm;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: users; Type: TABLE; Schema: public; Owner: mathiasm
--

CREATE TABLE public.users (
    user_id integer NOT NULL,
    login character varying(20) NOT NULL,
    first_name character varying(255) NOT NULL,
    last_name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    hash_password character varying(255) NOT NULL,
    phone_number character varying(255),
    adress character varying(255) NOT NULL
);


ALTER TABLE public.users OWNER TO mathiasm;

--
-- Name: users_user_id_seq; Type: SEQUENCE; Schema: public; Owner: mathiasm
--

CREATE SEQUENCE public.users_user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_user_id_seq OWNER TO mathiasm;

--
-- Name: users_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mathiasm
--

ALTER SEQUENCE public.users_user_id_seq OWNED BY public.users.user_id;


--
-- Name: users user_id; Type: DEFAULT; Schema: public; Owner: mathiasm
--

ALTER TABLE ONLY public.users ALTER COLUMN user_id SET DEFAULT nextval('public.users_user_id_seq'::regclass);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: mathiasm
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: mathiasm
--

REVOKE USAGE ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO mathiasm_bd_web_admin;


--
-- Name: TABLE users; Type: ACL; Schema: public; Owner: mathiasm
--

GRANT ALL ON TABLE public.users TO mathiasm_bd_web_admin;


--
-- Name: SEQUENCE users_user_id_seq; Type: ACL; Schema: public; Owner: mathiasm
--

GRANT ALL ON SEQUENCE public.users_user_id_seq TO mathiasm_bd_web_admin;


--
-- Name: DEFAULT PRIVILEGES FOR SEQUENCES; Type: DEFAULT ACL; Schema: -; Owner: mathiasm
--

ALTER DEFAULT PRIVILEGES FOR ROLE mathiasm GRANT ALL ON SEQUENCES TO mathiasm_bd_web_admin;


--
-- Name: DEFAULT PRIVILEGES FOR FUNCTIONS; Type: DEFAULT ACL; Schema: -; Owner: mathiasm
--

ALTER DEFAULT PRIVILEGES FOR ROLE mathiasm GRANT ALL ON FUNCTIONS TO mathiasm_bd_web_admin;


--
-- Name: DEFAULT PRIVILEGES FOR TABLES; Type: DEFAULT ACL; Schema: -; Owner: mathiasm
--

ALTER DEFAULT PRIVILEGES FOR ROLE mathiasm GRANT ALL ON TABLES TO mathiasm_bd_web_admin;


--
-- PostgreSQL database dump complete
--

\unrestrict XYNqHoc7clxbWrGk7XNP2kPQMud0ySTRvRDCAWONM8f6urTSNkbWtgvpeCso16n

