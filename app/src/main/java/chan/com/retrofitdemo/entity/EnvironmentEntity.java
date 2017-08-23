package chan.com.retrofitdemo.entity;

import org.simpleframework.xml.Element;
import org.simpleframework.xml.Root;

/**
 * Created by zehua_chen on 2017/8/23.
 */

@Root(name = "environment")
public class EnvironmentEntity {
    @Element(name = "aqi")
    private int aqi;

    @Element(name = "pm25")
    private int pm25;

    @Element(name = "suggest")
    private String suggest;

    @Element(name = "quality")
    private String quality;

    @Element(name = "MajorPollutants", required = false)
    private String majorPollutants;

    @Element(name = "o3")
    private int o3;

    @Element(name = "co")
    private int c0;

    @Element(name = "pm10")
    private int pm10;

    @Element(name = "so2")
    private int so2;

    @Element(name = "no2")
    private int no2;

    @Element(name = "time")
    private String time;


    public String getSuggest() {
        return suggest;
    }

    public void setSuggest(String suggest) {
        this.suggest = suggest;
    }

    public int getAqi() {
        return aqi;
    }

    public void setAqi(int aqi) {
        this.aqi = aqi;
    }

    public int getPm25() {
        return pm25;
    }

    public void setPm25(int pm25) {
        this.pm25 = pm25;
    }

    @Override
    public String toString() {
        return "EnvironmentEntity{" +
                "aqi=" + aqi +
                ", pm25=" + pm25 +
                ", suggest='" + suggest + '\'' +
                ", quality='" + quality + '\'' +
                ", majorPollutants='" + majorPollutants + '\'' +
                ", o3=" + o3 +
                ", c0=" + c0 +
                ", pm10=" + pm10 +
                ", so2=" + so2 +
                ", no2=" + no2 +
                ", time='" + time + '\'' +
                '}';
    }
}
