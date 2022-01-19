import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { IndexComponent } from './repas/index/index.component';
import { ListComponent } from './repas/list/list.component';
import { RepasIngredientsComponent } from './repas/repas-ingredients/repas-ingredients.component';

const routes: Routes = [
  { path: 'repas/index', component: IndexComponent },
  { path: 'repas/list', component: ListComponent },
  { path: 'repas/repas-ingredients/:id', component: RepasIngredientsComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
