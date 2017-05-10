<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class UserLogin extends \yii\db\ActiveRecord
{
  const STATUS_REQUEST =0;
      /**
       * @inheritdoc
       */
      public static function tableName()
      {
          return 'userlogin';
      }

}
