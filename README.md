# CI-Market
A Marketplace Webiste Using CodeIgniter4

## requirements
- PHP 7.4 or later
- Composer 2.0.14 or later
- MySQL  5.1 or later

## Setup
```bash
# Clone this repository
git clone https://github.com/BeSalt1080/CI-Market/

cd CI-Market/
php spark db:create Market
php spark migrate

# Press 'Enter' for each question without providing any input.
php spark shield:setup

# Start Server
php spark serve

```
## Get admin privileges
To obtain admin privileges, please register a new user and then navigate to localhost:8080/getAdmin
