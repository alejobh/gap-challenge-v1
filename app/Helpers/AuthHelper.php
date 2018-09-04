<?php

namespace App\Helpers;

class AuthHelper
{
  /*
  * This function checks if the Authorization header is right or not
  * @return boolean
  */
  public static function CheckAuth($auth_header) {

    $USERNAME = 'my_user';
    $PASSWORD = 'my_password';
    //Checks if the header exists
    if($auth_header==null) {
      return false;
    }
    else {
      //The header exists

      /*This line explodes the header into $base64_base where $base64_base[0] will be the "Basic" segment of the header
      * and $base_64_base[1] will be hashed in base64 'username:password'
      */
      $base64_base = explode(" ",$auth_header);

      /* This line explodes the result of the base64_decode into $decoded where $decoded[0] is going to be the username
      and $decoded[1] will be the password as the description HTTP Basic: Basic HASHBASE64(username:password)
      and then it will be exploded by ":" giving us the result
      */
      $decoded = explode(":", base64_decode($base64_base[1]));

      //If the decoded values in [0] and [1] are equal to the $USERNAME and $PASSWORD the Auth is ok
      if($decoded[0] == $USERNAME && $decoded[1] == $PASSWORD) {
        return true;
      }

      //returns false if not
      return false;
    }
  }
}
