<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjectCrudController extends AbstractCrudController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureFields(string $pageName): iterable
    {

        $customer = $this->entityManager->getRepository(Project::class);

        yield ImageField::new('project_img')->setBasePath('uploads/')->setUploadDir('public/uploads/')->setUploadedFileNamePattern('[randomhash].[extension]')->setRequired(false);
        yield TextField::new('project_name');
        yield TextEditorField::new('project_desc');
        yield SlugField::new('slug')->setTargetFieldName('project_name');
        yield TextField::new('project_location');
        yield MoneyField::new('project_funding')->setCurrency('XOF');
        yield IntegerField::new('project_funding_duration');
        yield TextEditorField::new('project_social_impact');
        yield TextEditorField::new('project_context');
        yield TextEditorField::new('project_presentation');
        yield TextEditorField::new('project_owner_presentation');
        yield NumberField::new('project_ip')->setNumDecimals(2);
        yield MoneyField::new('project_van')->setCurrency('XOF');
        yield TextField::new('project_drci');
        yield ImageField::new('project_bp')->setBasePath('uploads/')->setUploadDir('public/uploads/')->setUploadedFileNamePattern('[randomhash].[extension]')->setRequired(false);
        yield TextField::new('project_owner_status');
        yield TextField::new('project_owner_email');
        yield TelephoneField::new('project_owner_phone');
        yield BooleanField::new('is_valid');
        yield AssociationField::new('customer');
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
}
