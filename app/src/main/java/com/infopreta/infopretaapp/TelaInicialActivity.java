package com.infopreta.infopretaapp;

import android.content.Intent;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.SearchView;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class TelaInicialActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tela_inicial);

        ActionBar actionBar = getSupportActionBar();
        actionBar.setTitle("Início");


    }

    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();
        if(id == R.id.action_atualizar) {
            Toast.makeText(TelaInicialActivity.this,
                    "Atualizar",
                    Toast.LENGTH_SHORT).show();
        } else if(id == R.id.action_buscar) {
            Toast.makeText(TelaInicialActivity.this,
                    "Buscar",
                    Toast.LENGTH_SHORT).show();
        } else if(id == R.id.action_adicionar) {
            Toast.makeText(TelaInicialActivity.this,
                    "Adicionar",
                    Toast.LENGTH_SHORT).show();
            Intent intent = new Intent(TelaInicialActivity.this, FormularioCadastroActivity.class);
            startActivity(intent);
        } else if(id == R.id.action_config) {
            Toast.makeText(TelaInicialActivity.this,
                    "Config"
                    ,
                    Toast.LENGTH_SHORT).show();
        }
        else if(id == R.id.action_share) {
            Toast.makeText(TelaInicialActivity.this,
                    "Compartilhar",
                    Toast.LENGTH_SHORT).show();
        }
        else if(id == R.id.action_search) {
            Toast.makeText(TelaInicialActivity.this,
                    "Search",
                    Toast.LENGTH_SHORT).show();
        }
        return super.onOptionsItemSelected(item);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.menu_main, menu);
        MenuItem item = menu.findItem(R.id.action_search);

        SearchView searchView = (SearchView)item.getActionView();
        searchView.setOnQueryTextListener(onSearch());
        return true;
    }
    private SearchView.OnQueryTextListener onSearch() {
        return new SearchView.OnQueryTextListener() {
            @Override
            public boolean onQueryTextSubmit(String query) {
                Toast.makeText(TelaInicialActivity.this,"aaaaa",Toast.LENGTH_LONG).show();
                return false;
            }
            @Override
            public boolean onQueryTextChange(String newText) {
                Toast.makeText(TelaInicialActivity.this,"aaaaa",Toast.LENGTH_LONG).show();
                return false;
            }
        };

    }


}

