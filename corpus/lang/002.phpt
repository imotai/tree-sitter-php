==========
Simple While Loop Test
==========

<?php
$a=1;
while ($a<10) {
	echo $a;
	$a++;
}
?>

---

(program  (expression_statement (assignment_expression (simple_variable (variable_name (name))) (float))) (while_statement (binary_expression (simple_variable (variable_name (name))) (integer)) (compound_statement (echo_statement (simple_variable (variable_name (name)))) (expression_statement (postfix_increment_expression (simple_variable (variable_name (name))))))))