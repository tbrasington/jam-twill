@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])

@formField('medias', [
    'name' => 'cover',
    'label' => 'Cover image',
    'max' => 10,
])

@formField('block_editor')

@stop