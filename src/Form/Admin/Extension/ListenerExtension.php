<?php
/**
 * ListenerExtension
 *
 * @copyright Copyright © 2024 <company_name>. All rights reserved.
 * @author    <user_email>
 */

namespace Bssgpt\Form\Admin\Extension;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ListenerExtension extends AbstractTypeExtension
{

    /**
     * @var EventSubscriberInterface
     */
    private $addFormListener;

    public function __construct(
        EventSubscriberInterface $addFormListener
    ) {
        $this->addFormListener = $addFormListener;
    }

    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
        return [
            FormType::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventSubscriber($this->addFormListener);
    }

    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options): void
    {

    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver): void
    {

    }
}
