# Damn Vulnerable Web Application (DVWA)

## Technologies Identified

- **Web Server:** Apache HTTP Server  
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

---

## Source Code Analysis

### 1. Login Form (POST Method)

```html
<form action="login.php" method="post">
  <fieldset>
    <label for="user">Username</label>
    <input type="text" class="loginInput" size="20" name="username"><br />

    <label for="pass">Password</label>
    <input type="password" class="loginInput" AUTOCOMPLETE="off" size="20" name="password"><br />

    <p class="submit">
      <input type="submit" value="Login" name="Login">
    </p>
  </fieldset>
</form>
Observations
No client-side validation (required, pattern, maxlength)

No CSRF token present

Password autocomplete disabled, but this is not a security control

Backend script (login.php) clearly exposed via action

2. Logo Disclosure
html
Copy code
<p><img src="dvwa/images/login_logo.png" /></p>
Observation
Application structure (dvwa/images/) is exposed

Useful for directory mapping and fingerprinting

3. Insecure Login Form (GET Method)
html
Copy code
<form action="#" method="GET">
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="password" AUTOCOMPLETE="off" name="password"><br>
  <input type="submit" value="Login" name="Login">
</form>
Critical Issues
Credentials are transmitted via GET

Username and password may appear in:

URL

Browser history

Server logs

Severe authentication design flaw

4. Error Message Disclosure
html
Copy code
<pre><br>Username and/or password incorrect.</pre>
Observations
Authentication failure message is displayed

Allows attackers to test credential combinations

Can enable brute-force or username enumeration in other contexts

Security Observations Summary
Missing CSRF protection

No client-side input validation

Insecure use of GET method for authentication

Application structure disclosure

Verbose authentication error messages