<!DOCTYPE html>
<html>
    <body>
        <form action="/upcaser_proceed" method="post">
            @csrf
            <label for="first_name">First name:</label><br>
            <input type="text" id="first_name" name="first_name" value="John"><br>
            <label for="last_name">Last name:</label><br>
            <input type="text" id="last_name" name="last_name" value="Doe"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
