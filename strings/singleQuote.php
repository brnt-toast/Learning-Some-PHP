
<?php // Single quote Strings do not expand .. they are String Literals
// https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
echo 'sample string';

echo 'newlines resolve
this way too';

//Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back';