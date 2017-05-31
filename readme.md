[![CircleCI](https://circleci.com/gh/Vugario/Laravel.svg?style=svg)](https://circleci.com/gh/Vugario/Laravel)

# Component-based Laravel
This is a laravel 5.4.* with a component structure and service layer. This structure provides clear separation of concerns.
It forces components to interact only through defined interfaces, increasing both reliability and testability.

The project also supports Docker and CircleCI.

## Setup
- [ ] Clone the repo `git clone git@github.com:Vugario/Laravel.git`
- [ ] Run composer install (through docker) `docker run --rm -v $(pwd):/app composer/composer install`
- [ ] Run docker `docker-compose up -d`
- [ ] Visit http://0.0.0.0:8080/

## Project-based
The application can be divided in three (or more) projects.

**Web**  
The member-area in which all members can log in to manage their account.

For example:
- /login
- /register

**API**  
The API endpoints to retrieve data for either external partners or the frontend developers

For example:
- GET /api/venues
- GET /api/users

**Admin**  
The admin panel used by employees to manage the platform.

For example:
- /admin/venues
- /admin/users

## Service layer
Meanwhile all the business logic is placed in the service layer. So when a user is fetched in the Web, Admin, or API project, it always comes from the same `UserService`.

## File structure
The "app" folder only holds project-specific code like controllers and view logic. The actual business logic which needs to be shared between projects is placed in the "src" folder and divided up in clear components.

```
app
└-- Http
|   └-- Admin (project)
|   |   └-- Controller
|   |   └-- Resources (views)
|   └-- Api   (project)
|   |   └-- Controller
|   |   └-- Resources (views)
|   └-- Web   (project)
|   |   └-- Controller
|   |   └-- Resources (views)
src
└-- component
|   └-- User  (component)
|   |   └-- Service
|   |   └-- Model
|   └-- Venue (component)
|       └-- Service
|       └-- Model
public
```
