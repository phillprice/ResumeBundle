<?php 
namespace PhillPrice\ResumeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EditExperienceTaskType extends AbstractType
{
    /*protected $job_title;
    protected $start_date;
    protected $end_date;
    protected $description;
    protected $current;
    protected $url;
    protected $place;*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('job_title','Job title')
            ->add('start_date', null, array('widget' => 'single_text'))
            ->add('end_date', null, array('widget' => 'single_text'))
            ->add('description')
            ->add('current')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'task';
    }
}