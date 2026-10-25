
<h1>Register</h1>

<form action="index.php" method="POST">
    <fieldset>
        <legend>Person Details</legend>

        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname"
               value="<?php echo htmlspecialchars($_POST['surname'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        <br><br>

        <label for="email">Email address:</label><br>
        <input type="text" id="email" name="email"
               value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        <br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password">
        <br><br>

        <label for="address">Street Address:</label><br>
        <textarea id="address" name="address" rows="3" cols="30"><?php
            echo htmlspecialchars($_POST['address'] ?? '', ENT_QUOTES, 'UTF-8');
        ?></textarea>
        <br><br>

        <label for="state">State:</label><br>
        <select id="state" name="state">
            <option value="">Choose your state</option>
            <option value="ACT" <?php if (($_POST['state'] ?? '') == 'ACT') echo 'selected'; ?>>Australian Capital Territory</option>
            <option value="NSW" <?php if (($_POST['state'] ?? '') == 'NSW') echo 'selected'; ?>>New South Wales</option>
            <option value="NT" <?php if (($_POST['state'] ?? '') == 'NT') echo 'selected'; ?>>Northern Territory</option>
            <option value="QLD" <?php if (($_POST['state'] ?? '') == 'QLD') echo 'selected'; ?>>Queensland</option>
            <option value="SA" <?php if (($_POST['state'] ?? '') == 'SA') echo 'selected'; ?>>South Australia</option>
            <option value="TAS" <?php if (($_POST['state'] ?? '') == 'TAS') echo 'selected'; ?>>Tasmania</option>
            <option value="VIC" <?php if (($_POST['state'] ?? '') == 'VIC') echo 'selected'; ?>>Victoria</option>
            <option value="WA" <?php if (($_POST['state'] ?? '') == 'WA') echo 'selected'; ?>>Western Australia</option>

        </select>
        <br><br>

        <input type="hidden" name="country" value="Australia">

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"
            <?php if (($_POST['gender'] ?? '') == 'Male') echo 'checked'; ?>> Male

        <input type="radio" name="gender" value="Female"
            <?php if (($_POST['gender'] ?? '') == 'Female') echo 'checked'; ?>> Female
        <br><br>

        <label for="vegetarian">Vegetarian?</label>
        <input type="checkbox" id="vegetarian" name="vegetarian" value="Yes"
            <?php if (isset($_POST['vegetarian'])) echo 'checked'; ?>>
        <br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </fieldset>
</form>
