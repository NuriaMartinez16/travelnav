import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TurismoDetailComponent } from './turismo-detail/turismo-detail.component';
import { TurismoEditComponent } from './turismo-edit/turismo-edit.component';
import { TurismoNewComponent } from './turismo-new/turismo-new.component';

const routes: Routes = [
  { path: 'turismo/:id/new', component: TurismoNewComponent },
  { path: 'turismo/:turismoId', component: TurismoDetailComponent },
  { path: 'turismo/:id/edit', component: TurismoEditComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class TurismoRoutingModule {}
