# LightBulb API
This is a RESTful API used to access and add ideas.

## Authentication
This API requires authentication via http headers. Each request can pass a user name and a password or you can aquire a access key by getting /auth

An authtoken uses the following rules to be considered valid:
* Each Request must come from the same IP Address
* The token is only valid for a given timespan (yet undecided)


## Endpoints
/auth
/idea