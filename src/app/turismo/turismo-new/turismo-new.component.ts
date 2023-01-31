import { Component, OnInit } from '@angular/core';
import { Turismo } from 'src/app/shared/turismo';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { TurismoService } from '../../core/turismo.service';

@Component({
  selector: 'diw-turismo-new',
  templateUrl: './turismo-new.component.html',
  styleUrls: ['./turismo-new.component.scss'],
})
export class TurismoNewComponent implements OnInit {
  pageTitle = 'Turismo New';
  errorMessage: string = '';
  turismoForm: any;

  prodId: number = 0;
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
      // title: [
      //   '',
      //   [
      //     Validators.required,
      //     Validators.minLength(3),
      //     Validators.maxLength(50),
      //   ],
      // ],
      nombre: '',
      titular: '',
      tipo: '',
      descripcion: '',
      ubicacion: '',
      video: '',
      foto: '',
    });
    this.prodId = parseInt(this.activatedroute.snapshot.params['turismoId']);
  }
  saveTurismo(): void {
    if (this.turismoForm.valid) {
      if (this.turismoForm.dirty) {
        this.turismo = this.turismoForm.value;
        this.turismo.id = this.prodId;

        this.turismoService.createTurismo(this.turismo).subscribe(
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
