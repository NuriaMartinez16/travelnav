import { Component, Input, OnInit } from '@angular/core';
import { Turismo } from 'src/app/shared/turismo';

@Component({
  selector: 'app-turismo-item',
  templateUrl: './turismo-item.component.html',
  styleUrls: ['./turismo-item.component.scss'],
})
export class TurismoItemComponent implements OnInit {
  ngOnInit(): void {
    
  }
  @Input() turismo: Turismo = {
    id: 0,
    nombre: '',
    video: '',
    ubicacion: '',
    titular: '',
    descripcion: '',
    tipo: [''],
    foto: '',
  };
}
