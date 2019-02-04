<?php

/**
 * @return string
 */
function form(): string
{
    $form = getFormSettings();

    $result = '<div class="container">';
    $result .= '<div class="row col-lg-6 offset-lg-3 mt-3">';

    $result .= sprintf('<form method="%s" action="%s">', $form['method'], $form['action']);
    $result .= '<div class="form-group row">';

    foreach ($form['inputs'] as $input) {
        $result .= prepareLabel($input['label'], $input['id']);
        $result .= '<div class="col-lg-7">';
        $result .= prepareInput($input);
        $result .= '</div>';
        $result .= '<br>';
    }

    $result .= '</div>';
    $result .= '</form>';
    $result .= '</div></div>';

    return $result;
}

/**
 * @param array $input
 * @return string
 */
function prepareInput(array $input): string
{
    $result = '<input';
    if ($input['type'] !== null) {
        $result .= ' type="' . $input['type'] . '"';
    }
    if ($input['class'] !== null) {
        $result .= ' class="' . $input['class'] . '"';
    }
    if ($input['name'] !== null) {
        $result .= ' name="' . $input['name'] . '"';
    }
    if ($input['id'] !== null) {
        $result .= ' id="' . $input['id'] . '"';
    }
    if ($input['placeholder'] !== null) {
        $result .= ' placeholder="' . $input['placeholder'] . '"';
    }
    if ($input['value'] !== null) {
        $result .= ' value="' . $input['value'] . '"';
    }
    $result .= '>';

    return $result;
}

/**
 * @param string|null $label
 * @param string|null $id
 * @return string
 */
function prepareLabel(?string $label, ?string $id): string
{
    if ($label === null) {
        return '';
    }

    return sprintf('<label for="%s">%s</label>', $id, $label);
}

/**
 * @return array
 */
function getFormSettings(): array
{
    return include 'form-settings.php';
}

?>
