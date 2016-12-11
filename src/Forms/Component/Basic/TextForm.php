<?php

namespace Motor\CMS\Forms\Component\Basic;

use Kris\LaravelFormBuilder\Form;
use Motor\Backend\Models\Language;

class TextForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('page_id', 'hidden')
            ->add('headline', 'text', ['label' => trans('motor-cms::component/basic/text.headline'), 'rules' => 'required'])
            ->add('body', 'textarea', ['label' => trans('motor-cms::component/basic/text.body')]);
    }
}