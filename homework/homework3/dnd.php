<!DOCTYPE HTML>
<html>
    <head>
        <title>DnD Character</title>
    </head>
    
    <body>
        <!-- name of character in a text box -->
        Enter your character name.
        <form>
            <input name="charName" type="text">
        
        <br><br>
        
        <!-- radio for male or female -->
        Select your gender.
        
            <input type="radio" name="gender" value="male"> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other  
        
        <br><br>
        
        <!-- select for race -->
        Choose your race.
        
            <select name="racelist" form="raceform">
                <option value="human">Human</option>
                <option value="dwarf">Dwarf</option>
                <option value="elf">Elf</option>
                <option value="halfling">Halfling</option>
            </select>
        
        <br><br>
        
        <!-- select for class -->
        
            <select name="classlist" form="classform">
                <option value="cleric">Cleric</option>
                <option value="fighter">Fighter</option>
                <option value="rogue">Rogue</option>
                <option value="wizard">wizard</option>
            </select>
        
        <!-- checkbox for starter items -->
        <!-- submit button generates starting stats -->
        
            <input type="submit" value="Submit" />
        </form>
        
    </body>
</html>