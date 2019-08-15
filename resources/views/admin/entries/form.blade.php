@extends('twill::layouts.form')



@section('contentFields')
    @formField('input', [
        'name' => 'short_description',
        'label' => 'Short description',
        'maxlength' => 140
    ])
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 500
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Landscape Cover', 
])
@formField('medias', [
    'name' => 'portrait_cover',
    'label' => 'Portrait Cover', 
])



@formField('block_editor')

@formField('browser', [
        'routePrefix' => 'work',
        'moduleName' => 'sections',
        'name' => 'sections',
        'label' => 'Sections',
        'max' => 1
    ])

@stop