# OWASP Mutillidae II — Source Code Analysis

## Technologies Identified

- **Web Server:** Apache HTTP Server 2.2.14  
- **Operating System:** Ubuntu Linux  

### Programming Languages
- PHP 5.3.2  
- Python 2.6.5  
- Perl 5.10.1  

### Web Server Extensions / Modules
- OpenSSL 0.9.8k  
- mod_ssl 2.2.14  
- mod_python 3.3.1  
- mod_perl 2.0.4  

### JavaScript Library
- jQuery 1.3.2  

> All of the above technologies are appropriate for an intentionally vulnerable lab environment.

---

## Critical Source Code Finding  
### HTML Comment Disclosure

```html
<!-- I think the database password is set to blank or perhaps samurai.
It depends on whether you installed this web app from irongeeks site or
are using it inside Kevin Johnsons Samurai web testing framework.
It is ok to put the password in HTML comments because no user will ever see
this comment. -->
Why This Is Important
Sensitive information disclosure

Possible database password values exposed (blank or samurai)

HTML comments are visible to anyone

Ctrl + U immediately reveals them

Developer misconception

Comments are not a security boundary

Real-world impact

Could lead to database compromise if reused in a production environment

Security Observations Summary
Sensitive credentials exposed in HTML comments

False assumption that users cannot view page source

Technology stack is fully fingerprintable

Reinforces why secrets must never be stored in client-side comments