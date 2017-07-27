<?php

namespace Kodo\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KodoDashboardBundle:Default:index.html.twig');
    }

    public function sidemenuAction()
    {
        $sections = $this->getDoctrine()
            ->getRepository('KodoDashboardBundle:Sectionmenu')
            ->getSectionmenus();

        foreach($sections as &$section){
            $items = $this->getDoctrine()
                ->getRepository('KodoDashboardBundle:Itemmenu')
                ->getItemsbySectionId($section);

            $section->items = $items;
        }

        return $this->render(
            'KodoDashboardBundle:Default:sidemenu.html.twig',
            [
                'sections' => $sections,
            ]);
    }
}
