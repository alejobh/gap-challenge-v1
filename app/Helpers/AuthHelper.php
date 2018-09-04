<?php

namespace App\Helpers;

class AuthHelper
{
  public static function CheckAuth($auth_header) {

    $USERNAME = 'my_user';
    $PASSWORD = 'my_password';

    if($auth_header==null) {
      return false;
    }
    else {
      $base64_base = explode(" ",$auth_header);
      $decoded = explode(":", base64_decode($base64_base[1]));
      if($decoded[0] == $USERNAME && $decoded[1] == $PASSWORD) {
        return true;
      }
      return false;
    }
  }
}
