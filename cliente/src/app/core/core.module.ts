import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TurismoService } from './turismo.service';
import { HttpClientModule } from '@angular/common/http';

// Import for loading & configuring in-memory web api
import { TurismoData } from './turismo-data';

@NgModule({
  declarations: [],
  imports: [CommonModule, HttpClientModule],
  providers: [TurismoData],
})
export class CoreModule {}
