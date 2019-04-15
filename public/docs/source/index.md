---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_742a1cbd4a274c7269f0db99a704ff41 -->
## api/events
> Example request:

```bash
curl -X GET -G "http://localhost/api/events" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/events");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-29 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 13:14:58",
        "updated_at": "2019-04-15 13:14:58"
    },
    {
        "id": 2,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 13:15:00",
        "updated_at": "2019-04-15 13:15:00"
    },
    {
        "id": 3,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 13:15:00",
        "updated_at": "2019-04-15 13:15:00"
    },
    {
        "id": 4,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 13:15:01",
        "updated_at": "2019-04-15 13:15:01"
    },
    {
        "id": 5,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 13:15:01",
        "updated_at": "2019-04-15 13:15:01"
    },
    {
        "id": 6,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 18:53:33",
        "updated_at": "2019-04-15 18:53:33"
    },
    {
        "id": 7,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 19:09:51",
        "updated_at": "2019-04-15 19:09:51"
    },
    {
        "id": 8,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 19:09:52",
        "updated_at": "2019-04-15 19:09:52"
    },
    {
        "id": 9,
        "title": "Meet up - Coding UEA",
        "description": "A meet up for UEA students",
        "creator": 3,
        "date": "2019-04-30 20:00:00",
        "latitude": "-3.09258150",
        "longitude": "-60.01850990",
        "created_at": "2019-04-15 19:09:53",
        "updated_at": "2019-04-15 19:09:53"
    }
]
```

### HTTP Request
`GET api/events`


<!-- END_742a1cbd4a274c7269f0db99a704ff41 -->

<!-- START_8d14e5e937cf4c56287dab915670d893 -->
## api/events/search/{term}
> Example request:

```bash
curl -X GET -G "http://localhost/api/events/search/{term}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/events/search/{term}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
[]
```

### HTTP Request
`GET api/events/search/{term}`


<!-- END_8d14e5e937cf4c56287dab915670d893 -->

<!-- START_c2a79cd75e9fa4f038d410b6f2eb9ecc -->
## api/events/date
> Example request:

```bash
curl -X GET -G "http://localhost/api/events/date" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/events/date");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET api/events/date`


<!-- END_c2a79cd75e9fa4f038d410b6f2eb9ecc -->

<!-- START_379a3beb17bbb91528d80d8507f69655 -->
## api/events/{event}
> Example request:

```bash
curl -X GET -G "http://localhost/api/events/{event}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/events/{event}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "title": "Meet up - Coding UEA",
    "description": "A meet up for UEA students",
    "creator": 3,
    "date": "2019-04-29 20:00:00",
    "latitude": "-3.09258150",
    "longitude": "-60.01850990",
    "created_at": "2019-04-15 13:14:58",
    "updated_at": "2019-04-15 13:14:58"
}
```

### HTTP Request
`GET api/events/{event}`


<!-- END_379a3beb17bbb91528d80d8507f69655 -->

<!-- START_de3413bf02c9bb71627fa96e1c1c409f -->
## api/events
> Example request:

```bash
curl -X POST "http://localhost/api/events" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/events");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/events`


<!-- END_de3413bf02c9bb71627fa96e1c1c409f -->

<!-- START_388e610b5754b1df34564c1c6c66a126 -->
## api/events/{event}
> Example request:

```bash
curl -X PUT "http://localhost/api/events/{event}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/events/{event}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/events/{event}`


<!-- END_388e610b5754b1df34564c1c6c66a126 -->

<!-- START_379a30feb2949828b5f95efbfd7649c3 -->
## api/events/{event}
> Example request:

```bash
curl -X DELETE "http://localhost/api/events/{event}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/events/{event}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/events/{event}`


<!-- END_379a30feb2949828b5f95efbfd7649c3 -->

<!-- START_2ce15797e0f1735fc71010bfecd6110d -->
## api/submit
> Example request:

```bash
curl -X POST "http://localhost/api/submit" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/submit");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/submit`


<!-- END_2ce15797e0f1735fc71010bfecd6110d -->

<!-- START_70b56449b3f97638c43875938d7942bb -->
## api/checkin
> Example request:

```bash
curl -X POST "http://localhost/api/checkin" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/checkin");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/checkin`


<!-- END_70b56449b3f97638c43875938d7942bb -->

<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## api/users
> Example request:

```bash
curl -X GET -G "http://localhost/api/users" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Teste",
        "email": "rafael4@gmail.com",
        "email_verified_at": null,
        "created_at": "2019-04-15 13:14:42",
        "updated_at": "2019-04-15 13:14:42",
        "api_token": null
    },
    {
        "id": 2,
        "name": "Teste",
        "email": "rafael3@gmail.com",
        "email_verified_at": null,
        "created_at": "2019-04-15 13:33:36",
        "updated_at": "2019-04-15 13:33:36",
        "api_token": null
    }
]
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_ab2bc91546c6e0ee3a4e59d7c6e6a8ad -->
## api/users/search/{term}
> Example request:

```bash
curl -X GET -G "http://localhost/api/users/search/{term}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users/search/{term}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
[]
```

### HTTP Request
`GET api/users/search/{term}`


<!-- END_ab2bc91546c6e0ee3a4e59d7c6e6a8ad -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## api/users/{user}
> Example request:

```bash
curl -X GET -G "http://localhost/api/users/{user}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Teste",
    "email": "rafael4@gmail.com",
    "email_verified_at": null,
    "created_at": "2019-04-15 13:14:42",
    "updated_at": "2019-04-15 13:14:42",
    "api_token": null
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_78e59f373e92a1bb338f7d17b183ae6a -->
## api/users/{user}
> Example request:

```bash
curl -X PUT "http://localhost/api/users/{user}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/users/{user}`


<!-- END_78e59f373e92a1bb338f7d17b183ae6a -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## api/users/{user}
> Example request:

```bash
curl -X DELETE "http://localhost/api/users/{user}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## login api

> Example request:

```bash
curl -X POST "http://localhost/api/login" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register api

> Example request:

```bash
curl -X POST "http://localhost/api/register" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/register");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->


