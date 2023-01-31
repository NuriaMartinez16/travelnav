import { Component, Input } from '@angular/core';
import { Turismo } from 'src/app/shared/turismo';

@Component({
  selector: 'app-turismo-item',
  templateUrl: './turismo-item.component.html',
  styleUrls: ['./turismo-item.component.scss'],
})
export class TurismoItemComponent {
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
