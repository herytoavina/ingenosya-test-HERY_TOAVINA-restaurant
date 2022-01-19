import { Component, OnInit } from '@angular/core';
import { Form, FormArray, FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Observable } from 'rxjs';
import { Repas } from '../repas';
import { RepasService } from '../repas.service';

@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.css']
})
export class IndexComponent implements OnInit {
  repass: Repas[] = [];
  ingredientss: any = [];
  ingredientsArray = new FormArray([]);
  form = this.fb.group({
    nom: '',
    ingredients: this.fb.array([]),
  });
  
  constructor(private repasService: RepasService, private fb:FormBuilder) { }

  ngOnInit(): void {
    this.repasService.getIngredients().subscribe( (data: any) =>{
      this.ingredientss = data.data;
      console.log('INGREDIENTSS',this.ingredientss);
    })
  }

  get ingredients() {
    return this.form.controls["ingredients"] as FormArray;
  }

  addIngredients() {
    const lessonForm = this.fb.group({
        nom_ingredient: '',
        quantite: ''
    });
  
    this.ingredients.push(lessonForm);
  }

  

  save() {
    const repas = [ this.form.controls["nom"].value, this.ingredients.value];
    this.repasService.addRepas(repas).subscribe((response)=>{
      console.log(response);
    }
    )
    console.log('INGREDIENTS', repas);
  }

}
