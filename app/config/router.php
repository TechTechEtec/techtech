<?php 

# Pages

$this->get('/', 'RouteController@home');

$this->get('/signup-student', 'RouteController@signupStudent');

$this->get('/signup-school','RouteController@signupSchool');

$this->get('/create-class','RouteController@createClass');

$this->get('/signup-class','RouteController@signupClass');

$this->get('/choose-signup', 'RouteController@chooseSignup');

$this->get('/signin', 'RouteController@signin');

// All Controller Route needs to start with @ character in URL

# Controller Student

$this->get('/@students', 'StudentController@fetchAll'); # ----

$this->get('/@student', 'StudentController@fetchById'); # needs queries ID in POST submission

$this->get('/@signup-student', 'StudentController@register'); # needs queries NAME, EMAIL, PASSWORD and BIRTHDAY in POST submission

$this->get('/@update-student', 'StudentController@update'); # needs queries NAME, EMAIL, PASSWORD, BIRTHDAY and ID in POST submission

$this->get('/@addclass-student', 'StudentController@addClass'); # needs queries ID_STUDENT and COD_CLASS in POST submission



