# HTTP Requests and Response 
## HTTP
- Hyper Text Transfer Protocol used for transferring data over the web.
- It allow web browsers and servers to communicate by sending requests and reciveing responses.
- The Response from the server accompanied by status code that indicate the result of the requests. 

## HTTP Requests
Http Requests are made by client to request an action or resource identified by a url. There a several type of HTTP request each is designed for specific action. 
- Get - Request data from specific resource
- Post - Submit data to be processes to specific resource
- Put - Update a specific resourse with the data provided 
- Delete - Delete a specifc resourse
- Patch - Apply partial modification to a specific resource
- Head - Request only headers and status line not the body of the response
- Options - Retrun the HTTP method that server support for a specific url
## HTTP Response Status codes
Http responses status codes are issued by the server in response to client request made to the server 
### 1xx: Informational
- 100 Continue: The server has received the request headers, and the client should proceed to send the request body.
### 2xx: Success
- 200 OK: The request has succeeded. The information returned with the response depends on the method used in the request.
- 201 Created: The request has been fulfilled, leading to the creation of a new resource.
- 202 Accepted: The request has been accepted for processing, but the processing has not been completed.
- 204 No Content: The server successfully processed the request but is not returning any content.
### 3xx: Redirection
- 301 Moved Permanently: The URL of the requested resource has been changed permanently. The new URL is given in the response.
- 302 Found: Indicates that the resource is temporarily under a different URI.
- 304 Not Modified: Indicates that the resource has not been modified since the last request.
### 4xx: Client Error
- 400 Bad Request: The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax).
- 401 Unauthorized: Authentication is required and has failed or has not yet been provided.
- 403 Forbidden: The server understood the request but refuses to authorize it.
- 404 Not Found: The requested resource could not be found but may be available in the future.
- 405 Method Not Allowed: A request method is not supported for the requested resource.
### 5xx: Server Error
- 500 Internal Server Error: A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.
- 501 Not Implemented: The server either does not recognize the request method, or it lacks the ability to fulfill the request.
- 503 Service Unavailable: The server is currently unavailable (because it is overloaded or down for maintenance).