##### Introduction

The principle of multi tenancy is about a single instance of software running
on a server and serving multiple tenants. The interpretation of such a tenancy
application is quite divers, the possible implementations is even without
boundary.

Hyn tenancy is focused to provide a drop-in solution for Laravel without
sacrificing flexibility or hacks of the Laravel ecosystem.

This packages holds onto one core belief though; **the tenant is the website**, so;

- A tenant is a website.
- A website can have zero or more hostnames.
    - A website is identified when a specific hostname is requested.
- Customers allow for easier grouping.
    - Using customers is optional.
    - A website can belong to a customer.
    - A hostname can belong to a customer.

##### Website

You can think as a specific mirror of the code base, re-using your default
app code. But it is also able to have very specific logic, for instance
routes, a vendor folder, media and language files.

