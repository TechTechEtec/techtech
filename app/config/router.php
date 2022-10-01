<?php 

# PAGES

$this->get('/', 'RouteController@home');

$this->get('/signup-student', 'RouteController@signupStudent');

$this->get('/signup-school','RouteController@signupSchool');

$this->get('/create-class','RouteController@createClass');

$this->get('/signup-class','RouteController@signupClass');

$this->get('/choose-signup', 'RouteController@chooseSignup');

$this->get('/signin', 'RouteController@signin');

// All Controller Route needs to start with @ character in URL

# Controller STUDENT

$this->get('/@students', 'StudentController@fetchAll'); # ----

$this->get('/@student', 'StudentController@fetchById'); # needs queries ID in POST submission

$this->get('/@signup-student', 'StudentController@register'); # needs queries NAME, EMAIL, PASSWORD and BIRTHDAY in POST submission

$this->get('/@update-student', 'StudentController@update'); # needs queries NAME, EMAIL, PASSWORD, BIRTHDAY and ID in POST submission

# Controller SCHOOL

$this->get('/@schools', 'SchoolController@fetchAll'); # ----

$this->get('/@school', 'SchoolController@fetchById'); # needs queries ID in POST submission

$this->get('/@signup-school', 'SchoolController@register'); # needs queries NAME, EMAIL, PASSWORD and BIRTHDAY in POST submission

$this->get('/@update-school', 'SchoolController@update'); # needs queries NAME, EMAIL, PASSWORD, BIRTHDAY and ID in POST submission

# Controller TEACHER

$this->get('/@teachers', 'TeacherController@fetchAll'); # ----

$this->get('/@teacher', 'TeacherController@fetchById'); # needs queries ID in POST submission

$this->get('/@signup-teacher', 'TeacherController@register'); # needs queries NAME, EMAIL, PASSWORD and BIRTHDAY in POST submission

$this->get('/@update-teacher', 'TeacherController@update'); # needs queries NAME, EMAIL, PASSWORD, BIRTHDAY and ID in POST submission

# Controller CLASS

$this->get('/@classes', 'ClassController@fetchAll'); # ----

$this->get('/@class', 'ClassController@fetchById'); # needs queries ID in POST submission

$this->get('/@signup-class', 'ClassController@register'); # needs queries NAME, EMAIL, PASSWORD and BIRTHDAY in POST submission

$this->get('/@update-class', 'ClassController@update'); # needs queries NAME, EMAIL, PASSWORD, BIRTHDAY and ID in POST submission
