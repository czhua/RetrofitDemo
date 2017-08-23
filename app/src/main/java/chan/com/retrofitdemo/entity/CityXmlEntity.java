package chan.com.retrofitdemo.entity;

import org.simpleframework.xml.Attribute;
import org.simpleframework.xml.Element;
import org.simpleframework.xml.ElementList;
import org.simpleframework.xml.Root;

import java.util.ArrayList;

/**
 * Created by zehua_chen on 2017/8/23.
 */
@Root(name = "resp", strict = false)
public class CityXmlEntity {

    @Element(name = "city")
    private String city;

    @Element(name = "updatetime")
    private String updatetime;

    @Element(name = "wendu")
    private String wendu;

    @Element(name = "environment")
    private EnvironmentEntity environment;

    @ElementList(entry = "forecast")
    private ArrayList<WeatherEntity> forecast;

    public EnvironmentEntity getEnvironment() {
        return environment;
    }

    public void setEnvironment(EnvironmentEntity environment) {
        this.environment = environment;
    }


    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getUpdatetime() {
        return updatetime;
    }

    public void setUpdatetime(String updatetime) {
        this.updatetime = updatetime;
    }

    public String getWendu() {
        return wendu;
    }

    public void setWendu(String wendu) {
        this.wendu = wendu;
    }

    @Override
    public String toString() {
        return "CityXmlEntity{" +
                "city='" + city + '\'' +
                ", updatetime='" + updatetime + '\'' +
                ", wendu='" + wendu + '\'' +
                ", environment=" + environment +
                ", forecast=" + forecast +
                '}';
    }
}
