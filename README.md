What is this?
=============

This is the example application produced while giving my [yii course](http://www.cebe.cc/training).

Covered Topics
==============

- **creating DB migrations**
  - [protected/migrations](https://github.com/cebe/yii-course-example-code/tree/master/app/protected/migrations)
- **input validation**
  - [protected/models/User.php line 55](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/models/User.php#L55)
- **using attribute labels for i18n**
  - [protected/models/User.php line 122](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/models/User.php#L122)
- **Asset Packages**
  - [protected/config/assetPackages.php](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/config/assetPackages.php)
  - [protected/config/main.php line 46](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/config/main.php#L46)
  - [protected/views/layouts/main.php line 4](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/views/layouts/main.php#L4)
  - asset files are located in [protected/assets](https://github.com/cebe/yii-course-example-code/tree/master/app/protected/assets)
- **Using action classes and action providers**
  - [protected/controllers/PostController.php line 11](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/controllers/PostController.php#L11)
  - [protected/controllers/actions/UpdateAction.php](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/controllers/actions/UpdateAction.php)
- **authentication against a database**
  - [protected/components/UserIdentity.php](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/components/UserIdentity.php)
- **caching**
  - [protected/controllers/UserController.php line 166](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/controllers/UserController.php#L166)
- **using cache dependency**
  - [protected/components/ExampleDependency.php](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/components/ExampleDependency.php)
  - [protected/controllers/UserController.php line 215](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/controllers/UserController.php#L215)
- **proper model loading** (avoid SQL injection!)
  - [protected/controllers/UserController.php line 138](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/controllers/UserController.php#L138)
- **ajax and client validation**
  - [protected/views/user/_form.php line 11](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/views/user/_form.php#L11)
  - [protected/controllers/UserController.php line 90](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/controllers/UserController.php#L90)
- **extending core components**
  - [protected/components/MyRequest.php](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/components/MyRequest.php)
  - [protected/config/main.php line 56](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/config/main.php#L56)
- **creating an extension** (including use of client script and asset packages)
  - [protected/extensions/bootstrap](https://github.com/cebe/yii-course-example-code/tree/master/app/protected/extensions/bootstrap)
  - [protected/config/main.php line 42](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/config/main.php#L42)
- **widget skins**
  - [protected/views/skins](https://github.com/cebe/yii-course-example-code/tree/master/app/protected/views/skins)
  - [protected/config/main.php line 131](https://github.com/cebe/yii-course-example-code/blob/master/app/protected/config/main.php#L131)
- more to be described soon ...





