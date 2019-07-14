@extends('twill::layouts.form')

@section('contentFields')

@formField('checkbox', [
    'name' => 'isHomepage',
    'label' => 'Set as homepage'
])

    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])



@formField('block_editor')
@stop
