@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 500
    ])

@formField('medias', [
    'name' => 'cover',
    'label' => 'Cover image', 
])

@formField('block_editor')

@stop