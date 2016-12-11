<?php

namespace Motor\CMS\Forms\Backend;

use Kris\LaravelFormBuilder\Form;
use Motor\Backend\Models\Language;

class NavigationForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('parent_id', 'hidden')
            ->add('previous_sibling_id', 'hidden')
            ->add('next_sibling_id', 'hidden')
            ->add('name', 'text', ['label' => trans('motor-cms::backend/navigations.name'), 'rules' => 'required'])
            ->add('is_visible', 'checkbox', ['label' => trans('motor-cms::backend/navigations.is_visible')])
            ->add('is_active', 'checkbox', ['label' => trans('motor-cms::backend/navigations.is_active')])
            ->add('submit', 'submit', ['attr' => ['class' => 'btn btn-primary'], 'label' => trans('motor-cms::backend/navigations.save')]);
    }
}