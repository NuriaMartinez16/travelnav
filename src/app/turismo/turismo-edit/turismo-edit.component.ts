import { Component, OnInit } from '@angular/core';
import { FormBuilder } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { Turismo } from 'src/app/shared/turismo';
import { TurismoService } from 'src/app/core/turismo.service';


@Component({
  selector: 'diw-turismo-edit',
  templateUrl: './turismo-edit.component.html',
  styleUrls: ['./turismo-edit.component.scss'],
})
export class TurismoEditComponent implements OnInit {
  pageTitle = 'turismo Edit';
  errorMessage: string = '';
  turismoForm: any;

  turismoId: number = 0;
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

  constructor(
    private fb: FormBuilder,
    private activatedroute: ActivatedRoute,
    private router: Router,
    private turismoService: TurismoService
  ) {}

  ngOnInit(): void {
    this.turismoForm = this.fb.group({
      nombre: '',
      video: '',
      ubicacion: '',
      titular: '',
      descripcion: '',
      tipo: [''],
      foto: '',
    });

    // Read the turismo Id from the route parameter
    this.turismoId = parseInt(this.activatedroute.snapshot.params['id']);
    this.getTurismo(this.turismoId);
  }

  getTurismo(id: number): void {
    this.turismoService.getTurismoById(id).subscribe(
      (turismo: Turismo) => this.displayTurismo(turismo),
      (error: any) => (this.errorMessage = <any>error)
    );
  }

  displayTurismo(turismo: Turismo): void {
    if (this.turismoForm) {
      this.turismoForm.reset();
    }
    this.turismo = turismo;
    this.pageTitle = `Edit turismo: ${this.turismo.nombre}`;

    // Update the data on the form
    this.turismoForm.patchValue({
      nombre: this.turismo.nombre,
      video: this.turismo.video,
      ubicacion: this.turismo.ubicacion,
      titular: this.turismo.titular,
      descripcion: this.turismo.descripcion,
      tipo: this.turismo.tipo,
      foto: this.turismo.foto,
    });
  }

  deleteTurismo(): void {
    if (this.turismo.id === 0) {
      // Don't delete, it was never saved.
      this.onSaveComplete();
    } else {
      if (confirm(`Really delete the turismo: ${this.turismo.nombre}?`)) {
        this.turismoService.deleteTurismo(this.turismo.id).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMessage = <any>error)
        );
      }
    }
  }

  saveTurismo(): void {
    if (this.turismoForm.valid) {
      if (this.turismoForm.dirty) {
        this.turismo = this.turismoForm.value;
        this.turismo.id = this.turismoId;

        this.turismoService.updateTurismo(this.turismo).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMessage = <any>error)
        );
      } else {
        this.onSaveComplete();
      }
    } else {
      this.errorMessage = 'Please correct the validation errors.';
    }
  }

  onSaveComplete(): void {
    // Reset the form to clear the flags
    this.turismoForm.reset();
    this.router.navigate(['']);
  }

}
