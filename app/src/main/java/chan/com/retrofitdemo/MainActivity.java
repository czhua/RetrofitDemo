package chan.com.retrofitdemo;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import com.google.gson.Gson;

import java.util.List;

import chan.com.retrofitdemo.entity.ResultEntity;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class MainActivity extends AppCompatActivity {

    private static final String BASE_URL = "http://192.168.1.110:8080";
    private static final String TAG = MainActivity.class.getSimpleName();
    private TextView jsonTv;
    private TextView idTv;
    private TextView vipTv;
    private TextView amountTv;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        jsonTv = (TextView) findViewById(R.id.json_content_tv);
        idTv = (TextView) findViewById(R.id.id_content_tv);
        vipTv = (TextView) findViewById(R.id.vip_content_tv);
        amountTv = (TextView) findViewById(R.id.amount_content_tv);

        findViewById(R.id.get_data_btn).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                getData();
            }
        });

        findViewById(R.id.xml_parse_btn).setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                startActivity(new Intent(MainActivity.this, XmlParserActivity.class));
                startActivity(new Intent(MainActivity.this, LocationXmlActivity.class));
            }
        });

    }

    private void getData() {
        Retrofit retrofit = new Retrofit.Builder()
                .baseUrl(BASE_URL)
                .addConverterFactory(GsonConverterFactory.create(new Gson()))
                .build();
        RetrofitService service = retrofit.create(RetrofitService.class);
        Call<ResultEntity> call = service.getData("123", "1234");
        call.enqueue(new Callback<ResultEntity>() {
            @Override
            public void onResponse(Call<ResultEntity> call, Response<ResultEntity> response) {
                ResultEntity entity = response.body();
                Toast.makeText(MainActivity.this, entity.toString(), Toast.LENGTH_SHORT).show();
                Log.i(TAG, entity.toString());
                setData(entity);
            }

            @Override
            public void onFailure(Call<ResultEntity> call, Throwable t) {
                Log.i(TAG, t.getMessage());
            }
        });

    }

    public void setData(ResultEntity data) {
        jsonTv.setText(data.toString());
        List<String> fieldsList = data.getFields().get(0);
        List<String> dataList = data.getData().get(0);

        // 获取id的下标
        int idIndex = fieldsList.indexOf("id");
        int vipIndex = fieldsList.indexOf("vip");
        int amountIndex = fieldsList.indexOf("amount");

        // 根据id的下标获取id对应的值
        String id = dataList.get(idIndex);
        String vip = dataList.get(vipIndex);
        String amount = dataList.get(amountIndex);
        idTv.setText(id);
        vipTv.setText(vip);
        amountTv.setText(amount);
    }
}
