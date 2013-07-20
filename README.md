What is this?
=============

This is the example application produced while giving my [yii course](http://www.cebe.cc/training).

Covered Topics
==============

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
- more to be described soon ...





