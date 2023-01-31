import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TurismoNewComponent } from './turismo-new/turismo-new.component';
import { TurismoDetailComponent } from './turismo-detail/turismo-detail.component';
import { TurismoEditComponent } from './turismo-edit/turismo-edit.component';
import { TurismoItemComponent } from './turismo-item/turismo-item.component';
import { ReactiveFormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';
import { AppRoutingModule } from '../app-routing.module';
import { TurismoRoutingModule } from './turismo-routing.module';

@NgModule({
  declarations: [
    TurismoNewComponent,
    TurismoDetailComponent,
    TurismoEditComponent,
    TurismoItemComponent,
    
  ],
  imports: [CommonModule, ReactiveFormsModule, RouterModule, AppRoutingModule, TurismoRoutingModule],
  exports: [TurismoItemComponent],
})
export class TurismoModule {}
