<?php

/**
 * @return string
 */
function form(): string
{
    $form = getFormSettings();

    $result = '<div class="container">';
    $result .= '<div class="row col-lg-6 offset-lg-3 mt-3">';

    $result .= sprintf('<form method="%s" action="%s" style="width: 30rem;">', $form['method'], $form['action']);

    foreach ($form['inputs'] as $input) {
    	$result .= '<div class="form-group row">';
        $result .= prepareLabel($input['label'], 'col-sm-2 col-form-label', $input['id']);
        $result .= '<div class="col-lg-7">';
        $result .= prepareInput($input);
        $result .= '</div></div>';
    }

    $result .= "<hr><label for='skills'>Знания: </label><br>";
    foreach ($form['inputsCheck'] as $input) {
        $result .= '<div class="custom-control custom-checkbox">';
        $result .= prepareCheck($input);
        $result .= prepareLabel($input['label'], 'custom-control-label', $input['id']);
        $result .= '</div>';
    }

    $result .= "<hr><label for='gender'>Пол: </label><br>";
    $result .= '<fieldset class="form-group">';
    foreach ($form['inputsRadio'] as $input) {
        $result .= '<div class="custom-control custom-radio">';
        $result .= prepareRadio($input);
        $result .= prepareLabel($input['label'], 'custom-control-label', $input['id']);
        $result .= '</div>';
    }
    $result .= '</fieldset>';

    $result .= "<hr><label for='gender'>Предпочитаемый транспорт: </label><br>";
    $result .= '<fieldset class="form-group">';
    foreach ($form['inputsRadio2'] as $input) {
        $result .= '<div class="custom-control custom-radio">';
        $result .= prepareRadio($input);
        $result .= prepareLabel($input['label'], 'custom-control-label', $input['id']);
        $result .= '</div>';
    }
    $result .= '</fieldset>';

    $result .= "<hr><label for='gender'>Образование: </label><br>";
    $result .= '<fieldset class="form-group">';
    foreach ($form['inputsRadio3'] as $input) {
        $result .= '<div class="custom-control custom-radio">';
        $result .= prepareRadio($input);
        $result .= prepareLabel($input['label'], 'custom-control-label', $input['id']);
        $result .= '</div>';
    }
    $result .= '</fieldset>';

    $result .= '<div class=\'select\'>';
    foreach ($form['select'] as $input) {
        $result .= prepareSelect($input);
    }
    foreach ($form['options'] as $input) {
        $result .= prepareOptions($input);
    }
    $result .= '</select></div>';

    $result .= '<div class=\'select\'>';
    foreach ($form['select2'] as $input) {
        $result .= prepareSelect($input);
    }

    $result .= '<optgroup label="Любимый цвет">';
    foreach ($form['optionsGroup1'] as $input) {
        $result .= prepareOptions($input);
    }
    $result .= '</optgroup>';
    $result .= '<optgroup label="Тон">';
    foreach ($form['optionsGroup2'] as $input) {
        $result .= prepareOptions($input);
    }
    $result .= '</optgroup>';
    $result .= '</select></div>';

    foreach ($form['inputsCheck2'] as $input) {
        $result .= '<div class="custom-control custom-checkbox">';
        $result .= prepareCheck($input);
        $result .= prepareLabel($input['label'], 'custom-control-label', $input['id']);
        $result .= '</div>';
    }

    foreach ($form['inputsUpload'] as $input) {
        $result .= '<div class="custom-file margin">';
        $result .= prepareUpload($input);
        $result .= prepareLabel($input['label'], 'custom-file-label', $input['id']);
        $result .= '</div>';
    }

    foreach ($form['submit'] as $input) {
        $result .= '<div class="form-group row">';
        $result .= '<div class="col-sm-10">';
        $result .= prepareInput($input);
        $result .= '</div></div>';
    }

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

function prepareRadio(array $input): string
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
    if ($input['value'] !== null) {
        $result .= ' value="' . $input['value'] . '"';
    }
    if ($input['required'] !== null) {
        $result .= ' required';
    }
    if ($input['checked'] !== null) {
        $result .= ' checked';
    }
    $result .= '>';

    return $result;
}

function prepareCheck(array $input): string
{
    $result = '<input';
    if ($input['type'] !== null) {
        $result .= ' type="' . $input['type'] . '"';
    }
    if ($input['class'] !== null) {
        $result .= ' class="' . $input['class'] . '"';
    }
    if ($input['id'] !== null) {
        $result .= ' id="' . $input['id'] . '"';
    }
    if ($input['name'] !== null) {
        $result .= ' name="' . $input['name'] . '"';
    }
    if ($input['value'] !== null) {
        $result .= ' value="' . $input['value'] . '"';
    }
    if ($input['checked'] !== null) {
        $result .= ' checked="' . $input['checked'] . '"';
    }
    if ($input['disabled'] !== null) {
        $result .= ' disabled';
    }
    $result .= '>';

    return $result;
}

function prepareSelect(array $select): string
{
    $result = '<select';
    if ($select['class'] !== null) {
        $result .= ' class="' . $select['class'] . '"';
    }
    if ($select['name'] !== null) {
        $result .= ' name="' . $select['name'] . '"';
    }
    if ($select['id'] !== null) {
        $result .= ' id="' . $select['id'] . '"';
    }
    if ($select['size'] !== null) {
        $result .= ' size="' . $select['size'] . '"';
    }
    if ($select['multiple'] !== null) {
        $result .= ' multiple';
    }
    $result .= '>';

    return $result;
}

function prepareOptions(array $options): string
{
    $result = '<option';
    if ($options['value'] !== null) {
        $result .= ' value="' . $options['value'] . '"';
    }
    $result .= '>';
    if ($options['label'] !== null) {
        $result .= $options['label'];
    }
    $result .= '</option>';

    return $result;
}

function prepareUpload(array $input): string
{
    $result = '<input';
    if ($input['type'] !== null) {
        $result .= ' type="' . $input['type'] . '"';
    }
    if ($input['class'] !== null) {
        $result .= ' class="' . $input['class'] . '"';
    }
    if ($input['id'] !== null) {
        $result .= ' id="' . $input['id'] . '"';
    }
    if ($input['name'] !== null) {
        $result .= ' name="' . $input['name'] . '"';
    }
    if ($input['accept'] !== null) {
        $result .= ' accept="' . $input['accept'] . '"';
    }
    if ($input['multiple'] !== null) {
        $result .= ' multiple';
    }

    $result .= '>';

    return $result;
}

function prepareLabel(?string $label, ?string $class, ?string $id): string
{
    if ($label === null) {
        return '';
    }

    return sprintf('<label for="%s" class="%s">%s</label>', $id, $class, $label);
}

/**
 * @return array
 */
function getFormSettings(): array
{
    return include 'form-settings.php';
}

?>
