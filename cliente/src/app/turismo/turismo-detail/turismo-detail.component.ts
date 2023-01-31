import { Component, OnInit } from '@angular/core';
import { Turismo } from 'src/app/shared/turismo';
import { ActivatedRoute, Router } from '@angular/router';
import { TurismoService } from 'src/app/core/turismo.service';

@Component({
  selector: 'diw-turismo-detail',
  templateUrl: './turismo-detail.component.html',
  styleUrls: ['./turismo-detail.component.scss'],
})
export class TurismoDetailComponent implements OnInit {
  turismo: Turismo = {
    id: 0,
    nombre: '',
    video: '',
    ubicacion: '',
    titular: '',
    descripcion: '',
    tipo: [''],
    foto: '',
  };
  establecId = 0;

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private establecService: TurismoService
  ) {}

  ngOnInit() {
    this.establecId = parseInt(
      this.activatedroute.snapshot.params['turismoId']
    );
    this.establecService
      .getTurismoById(this.establecId)
      .subscribe((data: Turismo) => (this.turismo = data));
  }
  goEdit(): void {
    this.router.navigate(['/turismo', this.establecId, 'edit']);
  }
  onBack(): void {
    this.router.navigate(['']);
  }
}
