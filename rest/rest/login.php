<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 4/4/13
 * Time: 12:29 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<form name="frmLogin" id="frmLogin" method="post" action="">
    <table>
        <tr>
            <td colspan="2"><h3>Login</h3></td>

        </tr>
        <tr>
            <td >Username:</td>
            <td ><input type="text" name="username" id="username"></td>

        </tr>

        <tr>
            <td >Password:</td>
            <td ><input type="password" name="password" id="password"></td>

        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="login" ></td>


        </tr>

    </table>
</form>
