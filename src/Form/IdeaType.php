<?php

namespace App\Form;

use App\Entity\Idea;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IdeaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['attr' => ['placeholder' => 'Title of your idea']])
            ->add('content', TextareaType::class, ['attr' => ['class' => 'hide js-content-idea', 'placeholder' => "Write your idea here ...\n\n You can write some example code:\n```php\necho 'Hello world';\n```"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Idea::class,
        ]);
    }
}
