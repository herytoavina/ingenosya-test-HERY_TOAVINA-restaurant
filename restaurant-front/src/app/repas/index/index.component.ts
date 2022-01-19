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
  ingredientsArray = new FormArray([]);
  form = this.fb.group({
    nom: '',
    ingredients: this.fb.array([]),
  });
  
  constructor(private repasService: RepasService, private fb:FormBuilder) { }

  ngOnInit(): void {
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
    console.log('REPAS', this.form.controls["nom"].value);
    console.log('INGREDIENTS', this.ingredients.value);
  }

}
