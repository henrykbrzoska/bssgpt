<?php declare(strict_types=1);
namespace Bssgpt\EventListener;

use PrestaShopBundle\Form\FormCloner;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Event\PreSetDataEvent;
use Symfony\Component\Form\Exception\InvalidConfigurationException;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use PrestaShopBundle\Form\Admin\Sell\Product\SEO\SEOType;

class FormListener implements EventSubscriberInterface
{
    private FormCloner $formCloner;

    public function __construct(FormCloner $formCloner)
    {
        $this->formCloner = $formCloner;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::PRE_SET_DATA => 'preSetData',
        ];
    }

    public function preSetData(PreSetDataEvent $event): void
    {
        $form = $event->getForm();
        if (!$form->getConfig()->getType()->getInnerType() instanceof SEOType) {
            return;
        } else {
            foreach ($form->all() as $formItem) {
                $form->remove($formItem->getName());
                if($formItem->getName() == 'meta_title') {
                    $form->add('my_custom_button_after_meta_title', ButtonType::class, [
                        'label' => 'Get GPT Generated Meta Title',
                    ]);
                } else if ($formItem->getName() == 'meta_description') {
                    $form->add('my_custom_button_after_metadesc', ButtonType::class, [
                        'label' => 'Get GPT Generated Meta Description',
                    ]);
                }
                $form->add($formItem);
            }
        }
    }
}
