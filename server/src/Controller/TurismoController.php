<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Turismo;
use App\Entity\Tipo;


class TurismoController extends AbstractController
{

    public function __constructor(ManagerRegistry $doctrine) {
        //$this->doctrine->getManager();
    }

    #[Route('/turismo', name: 'app_turismo')]
    public function recogerTurismos(ManagerRegistry $doctrine)
    {
        $turismos = $doctrine->getRepository(Turismo::class)->findAll();
        $data = [];
        $emp = [];
        foreach ($turismos as $turismo){
            $emp = [ 
                'id'=> $turismo->getId(),
                'nombre'=> $turismo->getNombre(),
                'video'=> $turismo->getVideo(),
                'ubicacion'=> $turismo->getUbicacion(),
                'titular'=> $turismo->getTitular(),
                'descripcion'=> $turismo->getDescripcion(),
                'foto'=> $turismo->getFoto(),
                //'idUsuario'=> $turismo->getIdUsuario()
            ];
            $data[] = $emp;        
        }
        return $this->json([
            $data
        ]);
    }

    
    #[Route('/turismo/{id}', name: 'app_turismo_id', requirements: ['id' => '\d+'],  methods: ['GET'])]
    public function getById($id, ManagerRegistry $doctrine)
    {
        $turismo = $doctrine->getRepository(turismo::class)->findOneBy(["id" => $id]);
        $emp = [];
        $emp =[ 'id'=> $turismo->getId(),
                'nombre'=> $turismo->getNombre(),
                'video'=> $turismo->getVideo(),
                'ubicacion'=> $turismo->getUbicacion(),
                'titular'=> $turismo->getTitular(),
                'descripcion'=> $turismo->getDescripcion(),
                'foto'=>$turismo->getFoto(),
                //'idUsuario'=> $turismo->getIdUsuario()
            ];
        $data[] = $emp;       
        return $this->json([
            $data
        ]);
    }

    #[Route('/turismo/new', name: 'app_turismo_new', methods: ['POST'])]

    public function newTurismo(Request $request, ManagerRegistry $doctrine)
    {
        $er = $doctrine->getManager();

        $data = $request->getContent();
        $turismo_stClass = json_decode($data);

        $turismo = new turismo();
        $turismo->setNombre($turismo_stClass->nombre);
        $turismo->setVideo($turismo_stClass->video);
        $turismo->setUbicacion($turismo_stClass->ubicacion);
        $turismo->setTitular($turismo_stClass->titular);
        $turismo->setDescripcion($turismo_stClass->descripcion);
        $turismo->setFoto($turismo_stClass->foto);
        //$turismo->setIdUsuario($turismo_stClass->idUsuario);

        $er->persist($turismo);
        $er->flush();

        return $this->json([
            'messsage' => "turismo añadido correctamente",
            'turismo' => $turismo
        ]);
    }
    
    #[Route('/turismo/{id}', name: 'app_turismo_update',  methods: ['PUT'])]
    public function updateTurismo($id, Request $request, ManagerRegistry $doctrine ){

        $er = $doctrine->getManager();

        $data = $request->getContent();
        $turismo_stClass = json_decode($data);  
        
        $turismo = $doctrine->getRepository(turismo::class)->findOneBy(["id" => $id]);
        

        $turismo->setNombre($turismo_stClass->nombre);
        $turismo->setVideo($turismo_stClass->video);
        $turismo->setUbicacion($turismo_stClass->ubicacion);
        $turismo->setTitular($turismo_stClass->titular);
        $turismo->setDescripcion($turismo_stClass->descripcion);
        $turismo->setFoto($turismo_stClass->foto);
        //$turismo->setIdUsuario($turismo_stClass->idUsuario);

        $er->flush();
        
        return $this->json([
            "message" => "turismo actualizado"
        ]);
    }
    #[Route('/turismo/{id}', name: 'app_turismo_delete', methods: ['DELETE'])]

    public function deleteTurismo($id,Request $request, ManagerRegistry $doctrine ){
        $er = $doctrine->getManager();

        $data = $request->getContent();
        $turismo_stClass = json_decode($data);  
        
        $turismo = $doctrine->getRepository(turismo::class)->findOneBy(["id" => $id]);

        $er->remove($turismo);
        $er->flush();

       return $this->json([
           "message"=>"turismo eliminado"
       ]);
    }
    
   
}
