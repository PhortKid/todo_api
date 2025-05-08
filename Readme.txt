1.download xamp 
2.start apache na mysql
3.ingia kwenye admin ya mysql
4.create database inaitwa todo_app
5.ingia kwenye import alafu import file la todo_app.sql
6.weka code kwenye htdocs folder liite todo_api
7.Tumia POSTMAN au curl kutest au unaweza kutumia browser na maelezo ni haya chini

kulist todos
    http:://localhost/todo_api/todo_list.php

ku add todo andika hivi kwenye browser
    http:://localhost/todo_api/add_todo.php?name="coding"&date="14-7-2023"&time="14:46" 

ku edit todo andika hivi kwenye browser
    http:://localhost/todo_api/edit_todo.php?todo_id="1"&name="coding"&date="14-7-2023"&time="14:46" 

iyo todo todo_id="1" hapa kwenye moja utaandika id ya data unayotaka ku edit


ku delete todo andika hivi kwenye browser
    http:://localhost/todo_api/delete_todo.php?todo_id="1"


iyo todo todo_id="1" hapa kwenye moja utaandika id ya data unayotaka ku delete

                KWISHAAAAAA

Note kwa wanaotumia postman sio browser
kwenye tabs toa params weka body
