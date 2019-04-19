# CURD-APIs-Laravel
Open Terminal : php artisan serve --port=8010

1.For Get All Details

URL : http://127.0.0.1:8010/api/notes
Method : GET

Response : [
    {
        "id": 2,
        "subject": "Demo111",
        "body": "Demo1",
        "created_at": null,
        "updated_at": "2019-04-19 11:07:43"
    },
    {
        "id": 4,
        "subject": "Demo4",
        "body": "Demo4",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 5,
        "subject": "Demo5",
        "body": "Demo5",
        "created_at": null,
        "updated_at": null
    },
    {
        "id": 6,
        "subject": "Demo6",
        "body": "Demo6",
        "created_at": "2019-04-15 07:08:45",
        "updated_at": "2019-04-15 07:08:45"
    },
    {
        "id": 9,
        "subject": "Demo7",
        "body": "Demo7",
        "created_at": "2019-04-19 11:06:01",
        "updated_at": "2019-04-19 11:06:01"
    }
]
Status : 200

2. For Post 

URL : http://127.0.0.1:8010/api/notes/
Method : POST
Request : 
  Headers : Content-Type=application/json
  Body : {
        "subject": "Demo7",
        "body": "Demo7"
    }

Response : {
    "subject": "Demo7",
    "body": "Demo7",
    "updated_at": "2019-04-19 11:06:01",
    "created_at": "2019-04-19 11:06:01",
    "id": 9
}
Status : 200

3. For Delete

URL : http://127.0.0.1:8010/api/notes/8
Method : DELETE
Response : null
Status : 204

4. For Update

URL : http://127.0.0.1:8010/api/notes/2
Method : PUT
Request : 
  Headers : Content-Type=application/json
  Body : {
      "subject":"Demo1",
      "body":"Demo1"
    }
Response : {
    "id": 2,
    "subject": "Demo1",
    "body": "Demo1",
    "created_at": null,
    "updated_at": "2019-04-19 11:08:04"
}

5. For Get with Id

URL : http://127.0.0.1:8010/api/notes/2
Method : GET
Response : [
    {
        "id": 2,
        "subject": "Demo1",
        "body": "Demo1",
        "created_at": null,
        "updated_at": "2019-04-19 11:08:04"
    }
]
    
